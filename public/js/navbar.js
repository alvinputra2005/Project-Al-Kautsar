
// Toggle Sidebar
const menuToggle = document.getElementById('menuToggle');
const sidebar = document.querySelector('.nav-sidebar');
const overlay = document.querySelector('.sidebar-overlay');

menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');
  sidebar.classList.toggle('active');
  overlay.classList.toggle('active');
});

overlay.addEventListener('click', () => {
  menuToggle.classList.remove('active');
  sidebar.classList.remove('active');
  overlay.classList.remove('active');
});

// Close sidebar when clicking on links
document.querySelectorAll('.nav-sidebar .nav-link').forEach(link => {
  link.addEventListener('click', () => {
    menuToggle.classList.remove('active');
    sidebar.classList.remove('active');
    overlay.classList.remove('active');
  });
}); 

// Efek hover sign in 

const signInBtn = document.querySelector('.sign-in-btn'); 

signInBtn.addEventListener('mouseenter', function() { 
this.innerHTML = '<i class="fas fa-person-running"></i><span>Sign In</span>'; 
this.style.backgroundColor = 'rgba(255, 255, 255, 0.2)'; 

}); 

signInBtn.addEventListener('mouseleave', function() { 
this.innerHTML = '<i class="fas fa-right-to-bracket"></i><span>Sign In</span>'; 
this.style.backgroundColor = 'transparent'; 
}); 