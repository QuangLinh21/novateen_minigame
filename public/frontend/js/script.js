
function showTemplate(templateNumber) {
    // Hide all templates first
    document.getElementById('complate_template1').classList.add('hidden');
    document.getElementById('complate_template2').classList.add('hidden');
    document.getElementById('complate_template3').classList.add('hidden');
    document.getElementById('complate_template4').classList.add('hidden');
    // Show the selected template
    document.getElementById('complate_template' + templateNumber).classList.remove('hidden');
    // Update template data based on input
    var studentName = document.getElementById('stu_name').value;
    var studentDescription = document.getElementById('stu_description').value;
    var studentBirthDay = document.getElementById('stu_birthday').value;
    var fileInput = document.getElementById('stu_photo');
  
    var imgElement = document.querySelector('#complate_template' + templateNumber + ' .student_photo');
    if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            imgElement.src = e.target.result;
        };
        reader.readAsDataURL(fileInput.files[0]);
    }
    var template = document.getElementById('complate_template' + templateNumber);
    template.querySelector('.student_name').innerText = studentName;
    template.querySelector('.student_birthday').innerText = studentBirthDay;
    template.querySelector('.student_description').innerText = studentDescription;
}

// $("#create_tem").on('click', function() {
//     var element = $("#htmlContent");
//     html2canvas(element, {
//         onrendered: function(canvas) {
//             var imageData = canvas.toDataURL("image/jpeg");
//             var formData = new FormData($('#updateCourseForm')[0]);
//             formData.append('image', imageData); // Thêm dữ liệu hình ảnh vào formData
//             $.ajax({
//                 url: '{{ url("student_store") }}',
//                 method: 'POST',
//                 data: formData,
//                 processData: false,
//                 contentType: false,
//                 success: function(response) {
//                     console.log(response);
//                 }
//             });
//         }
//     });
// });
function autoClick() {
    $("#download").click();
}
$(document).ready(function() {
    var element = $("#htmlContent");
    $("#download").on('click', function() {
        html2canvas(element, {
            onrendered: function(canvas) {
                var imageData = canvas.toDataURL("image/png");
                var newData = imageData.replace(/^data:image\/png/,
                    "data:application/octet-stream");
                $("#download").attr("download", "image.png").attr("href", newData);
            }
        })
    })
})

