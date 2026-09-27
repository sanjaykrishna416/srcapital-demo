// Function to generate a URL-friendly string
function generateNewsUrl(url) {
  // Replace spaces with hyphens and remove special characters
  let formattedUrl = url
    .trim()
    .replace(/\s+/g, "-")
    .replace(/[^\w-]/g, "");

  // Construct the final URL
  return `news/${formattedUrl}`;
}

// --------------------------- Blog API ----------------------------------------------

function generatePagination(currentPage, totalPages, type) {
  let paginationContainer = document.getElementById("pagination");
  paginationContainer.innerHTML = "";

  let paginationHtml = `<nav aria-label="Page navigation"><ul class="pagination justify-content-center">`;

  // Determine function name based on type
  let fetchFunction = type === "blogs" ? "fetchBlogs" : "fetchNews";
  let pageParam = type === "blogs" ? "page" : "page";

  // Previous button
  if (currentPage > 1) {
    paginationHtml += `<li class="page-item"><a class="page-link" href="?${pageParam}=${currentPage - 1
      }" onclick="${fetchFunction}(${currentPage - 1
      }); return false;">&laquo;</a></li>`;
  }

  // Page numbers (show 5 pages at a time)
  let startPage = Math.max(1, currentPage - 2);
  let endPage = Math.min(totalPages, currentPage + 2);

  for (let i = startPage; i <= endPage; i++) {
    if (i === currentPage) {
      paginationHtml += `<li class="page-item active"><a class="page-link">${i}</a></li>`;
    } else {
      paginationHtml += `<li class="page-item"><a class="page-link" href="?${pageParam}=${i}" onclick="${fetchFunction}(${i}); return false;">${i}</a></li>`;
    }
  }

  // Next button
  if (currentPage < totalPages) {
    paginationHtml += `<li class="page-item"><a class="page-link" href="?${pageParam}=${currentPage + 1
      }" onclick="${fetchFunction}(${currentPage + 1
      }); return false;">&raquo;</a></li>`;
  }

  paginationHtml += `</ul></nav>`;

  paginationContainer.innerHTML = paginationHtml;
}

// --------------------------- Blog API ----------------------------------------------
function fetchBlogs(page = 1, limit = "all") {
  // Scroll to the top of the page smoothly

  // Update URL without reloading
  if (window.location.pathname === "/blogs") {
    window.history.pushState({ page }, "", `?pageid=${page}`);
  }

  fetch(`/api/blogs?pageid=${page}`)
    .then((response) => response.json())
    .then((data) => {
      let blogContainer = document.getElementById("blogList");
      blogContainer.innerHTML = "";

      // Check if API response contains valid data
      if (data && data.status === 200 && data.list && data.list.length > 0) {
        // Apply limit if not "all"
        let blogsToShow =
          limit === "all" ? data.list : data.list.slice(0, limit);

        blogsToShow.forEach((blog) => {
          let blogItem = `
<div class="col-lg-4 col-xl-4 wow fadeIn" data-wow-delay=".3s" data-aos="fade-down" data-aos-delay="100">
    <div class="blog-card-custom bg-white rounded shadow-sm overflow-hidden p-3 d-flex flex-column">

        <!-- Category -->
        <small class="blog-category fw-bold mb-2">
            ${blog.categoryName || 'Finance'}
        </small>

        <!-- Blog Title -->
        <a class="text-decoration-none" href="/blogs/${encodeURIComponent(blog.id)}">
            <h5 class="blog-title text-dark mb-2">
                ${blog.title.length > 40
              ? blog.title.substring(0, 40) + "..."
              : blog.title
            }
            </h5>
        </a>

        <!-- Short Content -->
        <p class="text-desgin text-dark mb-3">
            ${blog.shortContent.length > 120
              ? blog.shortContent.substring(0, 120) + "..."
              : blog.shortContent
            }
        </p>

        <!-- Blog Image -->
        <div class="blog-img mt-auto">
            <img src="${blog.image}" class="img-fluid w-100" alt="${blog.title}">
        </div>
         <div class="mt-3">
                                            <a href="/blogs/${encodeURIComponent(blog.id)}"
                                                class="text-decoration-none btn-primary w-100">Read more →</a>
                                        </div>
    </div>
</div>
`;

          blogContainer.innerHTML += blogItem;
        });

        // Generate Pagination
        generatePagination(data.pageid, data.pageCount, "blogs");
      } else {
        blogContainer.innerHTML = "<p>No blogs available.</p>";
      }
    })
    .catch((error) => console.error("Error fetching blogs:", error));
}

// --------------------------- News API ----------------------------------------------
function fetchNews(page = 1, limit = "all") {
  // Scroll to the top of the page
  if (window.location.pathname === "/news") {
    window.history.pushState({ page }, "", `?pageid=${page}`);
  }
  // Update URL without reloading

  fetch(`/api/news?pageid=${page}`)
    .then((response) => response.json())
    .then((data) => {
      let newsContainer = document.getElementById("newsList");

      newsContainer.innerHTML = "";

      // Check if API response contains valid data
      if (data && data.status === 200 && data.list && data.list.length > 0) {
        // Apply limit if not "all"
        let newsToShow =
          limit === "all" ? data.list : data.list.slice(0, limit);

        newsToShow.forEach((news) => {
          let newsUrl = generateNewsUrl(news.url);
          let newsItem = `
<div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-down" data-aos-delay="100">
    <div class="news-card p-4 h-100 d-flex flex-column">

        <!-- Date & Source -->
        <div class="mb-2 small text-muted">
            <span class="fw-semibold secondary-highlight-text">${news.create_date}</span>
            <span class="text-secondary"> | ${news.source_name || 'News Team'}</span>
        </div>
        <hr>

        <!-- Title -->
        <h6 class="fw-bold mb-2 text-dark">
            ${news.title.length > 60
              ? news.title.substring(0, 60) + "..."
              : news.title
            }
        </h6>

        <!-- Short Content -->
        <p class="text-desgin small mb-3">
            ${news.small_content.length > 120
              ? news.small_content.substring(0, 120) + "..."
              : news.small_content
            }
        </p>
        <hr>

        <!-- Explore Button -->
        <div class="d-flex justify-content-between align-items-center mt-auto">
            <a href="${newsUrl}" 
               class="fw-semibold secondary-highlight-text text-decoration-none d-inline-flex align-items-center gap-3">
                Explore
                <button class="btn btn-sm rounded-circle shadow-sm custom-btn d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-arrow-right"></i>
                </button>
            </a>
        </div>

    </div>
</div>
`;


          newsContainer.innerHTML += newsItem;
        });

        // Generate Pagination
        generatePagination(data.pageid, data.pageCount, "news");
      } else {
        newsContainer.innerHTML = "<p>No news available.</p>";
      }
    })
    .catch((error) => console.error("Error fetching news:", error));
}

async function fetchAllSchemesAndPopulateDropdown(
  dropdownSelector,
  apiUrl,
  preselectedValue
) {
  try {
    const response = await fetch(apiUrl, {
      method: "GET",
      headers: {
        Accept: "application/json",
      },
    });

    const data = await response.json();
    const dropdown = document.querySelector(dropdownSelector);

    // Clear existing options
    dropdown.innerHTML = '<option value="">Select a Scheme</option>';

    if (data.list && data.list.length > 0) {
      data.list.forEach((scheme) => {
        const option = document.createElement("option");
        option.value = scheme;
        option.textContent = scheme;
        if (scheme === preselectedValue) {
          option.selected = true; // Pre-select this option
        }
        dropdown.appendChild(option);
      });
    } else {
      alert("No schemes found!");
    }
  } catch (error) {
    console.error("Failed to fetch schemes:", error);
    alert("An error occurred while fetching schemes.");
  }
}

async function submitSchemeCategory(apiUrl, selectedSchemeCategory, params) {
  if (!selectedSchemeCategory) {
    alert("Please select a scheme category before submitting.");
    return;
  }

  try {
    const response = await fetch(apiUrl, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
      body: JSON.stringify(params),
    });

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    const result = await response.json();
    return result; // Return the result for further use if needed
  } catch (error) {
    console.error("Error submitting scheme:", error);
    alert("An error occurred while submitting the scheme category.");
  }
}
