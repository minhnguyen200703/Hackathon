<!-- HTML -->
<button class="back-to-top hidden">
    <i class="fa-solid fa-angles-up back-to-top-icon"></i>
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
    </svg>
</button>

<!-- JS -->
<script>
        const showOnPx = 100;
        const backToTopButton = document.querySelector(".back-to-top");
        const scrollContainer = () => {
            return document.documentElement || document.body;
        };

        const goToTop = () => {
            document.body.scrollIntoView({
                behavior: "smooth"
            });
        };

        document.addEventListener("scroll", () => {
            console.log("Scroll Height: ", scrollContainer().scrollHeight);
            console.log("Client Height: ", scrollContainer().clientHeight);

            const scrolledPercentage =
                (scrollContainer().scrollTop /
                    (scrollContainer().scrollHeight - scrollContainer().clientHeight)) * 100;


            if (scrollContainer().scrollTop > showOnPx) {
                backToTopButton.classList.remove("hidden");
            } else {
                backToTopButton.classList.add("hidden");
            }
        }
// CSS
.back-to-top {
    position: fixed;
    right: 40px;
    bottom: 40px;
    background: var(--blue-to-light-red);
    padding: 12px;
    border: none;
    cursor: pointer;
    opacity: 0.9;
    transition: opacity 0.5s ease 0s;
}
  
.back-to-top:hover {
    opacity: 1;
}
  
.hidden {
    opacity: 0%;
}
  
.back-to-top-icon {
    opacity: 1;
    font-size: 1.6rem;
    width: 16px;
    height: 16px;
    color: white;
}
                                  

        );

        backToTopButton.addEventListener("click", goToTop);
    </script>
