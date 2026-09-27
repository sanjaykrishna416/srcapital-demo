<style>
    /* Fullscreen Preloader */
    #preloader {
        position: fixed;
        width: 100%;
        height: 100%;
        background: #fff;
        /* Dark background (no white screen) */
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity 0.5s ease-in-out;
    }

    /* Loader Dots Animation */
    .loader {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loader span {
        width: 12px;
        height: 12px;
        margin: 0 5px;
        background: black;
        border-radius: 50%;
        display: inline-block;
        animation: bounce 1.4s infinite ease-in-out both;
    }

    /* Delay animations for five dots */
    .loader span:nth-child(1) {
        animation-delay: -0.40s;
    }

    .loader span:nth-child(2) {
        animation-delay: -0.30s;
    }

    .loader span:nth-child(3) {
        animation-delay: -0.20s;
    }

    .loader span:nth-child(4) {
        animation-delay: -0.10s;
    }

    .loader span:nth-child(5) {
        animation-delay: 0;
    }

    /* Keyframes for bounce effect */
    @keyframes bounce {

        0%,
        80%,
        100% {
            transform: scale(0);
            opacity: 0.3;
        }

        40% {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Hide body until loader disappears */
    /* body {
        opacity: 0;
        transition: opacity 1s ease-in-out;
    } */
</style>

<!-- Loader -->
<div id="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            document.getElementById("preloader").style.opacity = "0"; // Fade out loader
            document.body.style.opacity = "1"; // Fade in the body
            setTimeout(() => {
                document.getElementById("preloader").style.display =
                    "none"; // Hide loader after fade out
            }, 500); // Wait for fade-out transition
        }, 1000); // Show loader for 1 second before fade out
    });
</script>