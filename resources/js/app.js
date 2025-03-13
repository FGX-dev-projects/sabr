import './bootstrap';
function toggleDropdown() {
    document.getElementById('dropdown-menu').classList.toggle('hidden');
}

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".nav-button").forEach((button) => {
        button.addEventListener("click", function (event) {
            event.stopPropagation(); // Prevents closing immediately
            
            // Find the closest parent `.relative` and toggle its `.dropdown-menu`
            let parent = button.closest(".relative");
            let dropdownMenu = parent.querySelector(".dropdown-menu");

            // Close all dropdowns first
            document.querySelectorAll(".dropdown-menu").forEach((menu) => {
                if (menu !== dropdownMenu) {
                    menu.classList.add("hidden");
                }
            });

            // Toggle the targeted dropdown
            dropdownMenu.classList.toggle("hidden");
        });
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        document.querySelectorAll(".dropdown-menu").forEach((menu) => {
            if (!menu.contains(event.target) && !event.target.closest(".nav-button")) {
                menu.classList.add("hidden");
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('active');
    });

    // Close the menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
            mobileMenu.classList.remove('active');
        }
    });
});

document.querySelectorAll(".question-wrapper").forEach((question) => {
    question.addEventListener("click", function () {
      let container = this.closest(".accordion");
      let answer = container.querySelector(".answer-wrapper");
      let trigger = container.querySelector(".material-icons.drop");
  
      // Toggle answer visibility
      if (answer.style.display === "block" || answer.style.display === "") {
        answer.style.display = "none";
      } else {
        answer.style.display = "block";
      }
  
      // Toggle icon class
      trigger.classList.toggle("icon-expend");
  
      // Toggle expanded class on container
      container.classList.toggle("expanded");
    });
  });
  


