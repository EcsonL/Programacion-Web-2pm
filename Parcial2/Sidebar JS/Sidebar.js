const boton = document.querySelector('.toggle-btn');

boton.addEventListener('click', function () {
  console.log('clik')
  document.getElementById('container').classList.toggle('clickdetectado');
  console.log(document.getElementById('container'))
});