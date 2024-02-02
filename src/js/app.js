document.addEventListener('DOMContentLoaded', function () {
   eventListeners();
   darkMode();  
});

function darkMode() {
   const preferDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

   //console.log(preferDarkMode.matches);  
   
   if (preferDarkMode.matches) {
      document.body.classList.add('dark-mode')
   }else{
      document.body.classList.remove('dark-mode')
   }

   preferDarkMode.addEventListener('change', function () {
      if (preferDarkMode.matches) {
         document.body.classList.add('dark-mode')
      }else{
         document.body.classList.remove('dark-mode')
      }
   });

   const btnDarkMode = document.querySelector('.dark-mode-btn');

   btnDarkMode.addEventListener('click', function () {
      document.body.classList.toggle('dark-mode');
   });
}

function eventListeners(){
   const mobileMenu = document.querySelector('.mobile-menu');

   mobileMenu.addEventListener('click', responsiveNavigation);
}

function responsiveNavigation() {
   const navigation = document.querySelector('.navegacion');

   if (navigation.classList.contains('mostrar')) {
      navigation.classList.remove('mostrar');
   }else{
      navigation.classList.add('mostrar');
   }
}