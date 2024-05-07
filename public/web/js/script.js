function myFunction() {
    var element = document.getElementById('megaMenu');
        element.classList.toggle("nav_web_small");
        console.log(element);
}
//Board of Director Show More Btn Show Hide
function togglePopup(popupId) {
    var popup = document.getElementById("popup-" + popupId);
    popup.classList.toggle("show");
}


function closeMobileMenu() {
    document.getElementById("closeMenu").alert('hi');
}
//Contact Us Page Filed Label goes upper and its fixed when mouseOut
const inputFields = document.querySelectorAll('.input-field');

inputFields.forEach(inputField => {
    inputField.addEventListener('input', function() {
        const label = this.nextElementSibling;
        label.classList.toggle('shrink-label', this.value !== '');
    });
});


// instant image read and display
function readImageURL(input, preview){
    if (input.files && input.files[0])
    {
        if(input.files[0].size <= 5600000)
        {
            var imgDiv = document.getElementById(preview);
            imgDiv.classList.remove("hide");
            var alertDiv = document.getElementById(preview+"Alert");
            alertDiv.classList.add("hide");
            var reader = new FileReader();
            reader.onload = function (e)
            {
                $('#'+preview)
                .attr('src', e.target.result)
            };
            reader.readAsDataURL(input.files[0]);
        }else{
            var imgDiv = document.getElementById(preview);
            imgDiv.classList.add("hide");
            var alertDiv = document.getElementById(preview+"Alert");
            alertDiv.classList.remove("hide");

        }
    }
}