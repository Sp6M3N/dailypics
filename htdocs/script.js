function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })

  var modal = document.getElementById('myModal');
  var modalImg = document.getElementById('img01');
  
  function showImage(imgElement) { 
     var src = imgElement.getAttribute("src");
     modal.style.display = "block";
     modalImg.src = src;
  }
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() { 
      modal.style.display = "none";
  }