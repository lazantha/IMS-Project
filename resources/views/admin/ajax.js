// ajax post request

// @section('scripts')
//     @parent
//     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
//     <script>
//     $(document).ready(function() {
//         $('#addDepartmentForm').on('submit', function(e) {
//             e.preventDefault(); // Prevent the default form submission

//             // Serialize the form data
//             var formData = $(this).serialize();

//             // Send an Ajax POST request
//             $.ajax({
//                 type: 'POST',
//                 url: '{{ route("setDepartments") }}', // Replace with your route URL
//                 data: formData,
//                 success: function(response) {
//                     // Handle success response
//                     console.log(response);

//                     // Reset the form
//                     $('#addDepartmentForm')[0].reset();

//                     // Add the new department to the list
//                     var newDepartment = response.department; // Assuming the response contains the new department data
//                     var departmentListItem = $('<li>').text(newDepartment.name);
//                     $('#departmentList').append(departmentListItem);
//                 },
//                 error: function(xhr, status, error) {
//                     // Handle error
//                     console.error(xhr.responseText);
//                 }
//             });
//         });
//     });
// </script>


// @endsection