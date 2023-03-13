function openPage(link){
  window.open(link, "_blank").focus();
}

const btn = document.getElementById("btnTopo")
btn.addEventListener("click", function(){
  window.scrollTo(0,0)
})

const $html = document.querySelector('html')
const $checkbox = document.querySelector('#switch')

$checkbox.addEventListener('change', function(){
  $html.classList.toggle('dark-mode')
})