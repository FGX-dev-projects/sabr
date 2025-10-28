import './bootstrap';
import toastr from 'toastr';
import 'toastr/build/toastr.min.css';

window.toastr = toastr;
function toggleDropdown() {
    document.getElementById('dropdown-menu').classList.toggle('hidden');
}

// Add this to your existing JavaScript in the layout file
// Update the mobile menu toggle functionality

document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const tabletMenuButton = document.getElementById('tablet-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const searchBtnMobile = document.getElementById('search-btn-mobile');
    const searchBtnTablet = document.getElementById('search-btn-tablet');

    // Function to toggle menu
    function toggleMenu() {
        mobileMenu.classList.toggle('active');
    }

    // Mobile menu button (for phones)
    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', toggleMenu);
    }

    // Tablet menu button (for tablets)
    if (tabletMenuButton) {
        tabletMenuButton.addEventListener('click', toggleMenu);
    }

    // Search buttons
    if (searchBtnMobile) {
        searchBtnMobile.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const searchModal = document.getElementById('search-modal');
            if (searchModal) {
                searchModal.classList.add('show');
                searchModal.style.display = 'flex';
                document.getElementById('search-input').focus();
            }
        });
    }

    if (searchBtnTablet) {
        searchBtnTablet.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const searchModal = document.getElementById('search-modal');
            if (searchModal) {
                searchModal.classList.add('show');
                searchModal.style.display = 'flex';
                document.getElementById('search-input').focus();
            }
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (mobileMenu && 
            !mobileMenu.contains(e.target) && 
            !mobileMenuButton?.contains(e.target) &&
            !tabletMenuButton?.contains(e.target)) {
            mobileMenu.classList.remove('active');
        }
    });

    // Dropdown functionality for both desktop and mobile/tablet
    const dropdownButtons = document.querySelectorAll('.nav-button');
    
    dropdownButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const dropdown = this.nextElementSibling;
            
            if (dropdown && dropdown.classList.contains('dropdown-menu')) {
                e.stopPropagation();
                
                // Close other dropdowns
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    if (menu !== dropdown) {
                        menu.classList.add('hidden');
                    }
                });
                
                // Toggle current dropdown
                dropdown.classList.toggle('hidden');
            }
        });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.nav-button') && !e.target.closest('.dropdown-menu')) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.classList.add('hidden');
            });
        }
    });
});



// document.querySelectorAll(".question-wrapper").forEach((question) => {
//     question.addEventListener("click", function () {
//       let container = this.closest(".accordion");
//       let answer = container.querySelector(".answer-wrapper");
//       let trigger = container.querySelector(".material-icons.drop");
  
//       // Toggle answer visibility
//       if (answer.style.display === "block" || answer.style.display === "") {
//         answer.style.display = "none";
//       } else {
//         answer.style.display = "block";
//       }
  
//       // Toggle icon class
//       trigger.classList.toggle("icon-expend");
  
//       // Toggle expanded class on container
//       container.classList.toggle("expanded");
//     });
//   });

  document.addEventListener("DOMContentLoaded", function () {
    function populateDOBFields() {
        // Populate Dates (1-31)
        document.querySelectorAll(".dob-date").forEach(select => {
            select.innerHTML = '<option value="">Date</option>'; // Clear old options
            for (let i = 1; i <= 31; i++) {
                let option = document.createElement("option");
                option.value = i;
                option.textContent = i;
                select.appendChild(option);
            }
        });

        // Populate Months (Jan - Dec)
        const months = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
        document.querySelectorAll(".dob-month").forEach(select => {
            select.innerHTML = '<option value="">Month</option>';
            months.forEach((month, index) => {
                let option = document.createElement("option");
                option.value = index + 1;
                option.textContent = month;
                select.appendChild(option);
            });
        });

        // Populate Years (1900 - Current Year)
        const currentYear = new Date().getFullYear();
        document.querySelectorAll(".dob-year").forEach(select => {
            select.innerHTML = '<option value="">Year</option>';
            for (let i = currentYear; i >= 1900; i--) {
                let option = document.createElement("option");
                option.value = i;
                option.textContent = i;
                select.appendChild(option);
            }
        });
    }

    // Call the function to populate the fields
    populateDOBFields();
});

  


