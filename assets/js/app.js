document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('#navbar a').forEach($link => {
    if ($link.getAttribute('href') == window.location.pathname) {
      $link.parentElement.classList.add('active')
    }
  })

  document.querySelectorAll('[data-confirm]').forEach($link => {
    $link.addEventListener('click', (e) => {
      e.preventDefault()
      if (window.confirm($link.getAttribute('data-confirm'))) {
        window.location = $link.getAttribute('href')
      }
    })
  })
})


// jQuery version
// $(document).ready(function (){
//   $('#navbar a').each(function ($link) {
//    if ($link.getAttribute('href') == window.location.pathname) {
//       $($link).addClass('active')
//     }
//   })
// })
