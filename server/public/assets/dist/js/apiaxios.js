const fetchStudents = async () => {
    try {
        $("#studentsTableBody").html(`
            <tr>
                <td colspan="5" class="text-center">
                    <div class="d-flex justify-content-center">
                        <div class="spinner-border text-success" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </td>
            </tr>`);

        const response = await axios.get("/api/students");
        const students = response.data.students;

        const tbody = $("#studentsTableBody");
        tbody.html("");

        if (students.length > 0) {
            let i = 1;
            students.forEach((student) => {
                const {
                    id,
                    user: { firstname, middlename, lastname },
                    course,
                } = student;
                const fullname = `${firstname} ${middlename} ${lastname}`;
                const row = `
                    <tr>
                        <td>${i++}</td>
                        <td>${student.student_no}</td>
                        <td>${fullname}</td>

                        <td>
                            <i class="table-icon fa-solid fa-eye mx-2" onclick="fetchOneStudent(${
                                student.id
                            })" data-toggle="tooltip" data-placement="top" title="More Information"></i>
                            <i class="table-icon fa-solid fa-pencil mr-2" data-toggle="tooltip" data-placement="top" title="Edit Information"></i>
                            <i class="table-icon fa-solid fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i>
                        </td>
                        <td>
                            <p data-toggle="modal"
                            data-target="#modalStudAdd">helo</p>
                        </td>
                    </tr>`;
                tbody.append(row);
            });
        } else {
            tbody.html(`
                <tr>
                    <td colspan="5" class="text-center text-danger"><h4>No records found!</h4></td>
                </tr>`);
        }
    } catch (error) {
        console.error("Error fetching students:", error);
    }
};

fetchStudents();

// Fetch courses from the API
const fetchCourses = async () => {
    try {
        const response = await axios.get("http://127.0.0.1:8000/api/courses");
        const courses = response.data.courses;

        const selectCourse = $("#course");

        // Clear existing options
        selectCourse.html(
            "<option selected disabled>------ Select Course ------</option>"
        );

        // Add options for each course
        courses.forEach((course) => {
            const option = $("<option>")
                .val(course.id)
                .text(course.course_name);
            selectCourse.append(option);
        });
    } catch (error) {
        console.error(error);
        // Handle any errors
    }
};
fetchCourses();

const fetchOneStudent = async (studentId) => {
    try {
        const response = await axios.get(`/api/students/${studentId}`);
        const student = response.data.student;

        alert(student.id);
    } catch (error) {
        console.error("Error fetching student details:", error);
    }
};

// CREATE STUDENT FUNCTION
const createStudent = async () => {
    const student_no = $("#student_no").val();
    const firstname = $("#firstname").val();
    const middlename = $("#middlename").val();
    const lastname = $("#lastname").val();
    const birthdate = $("#birthdate").val();
    const gender = $("#gender").val();
    const email = $("#email").val();
    const photo = $("#croppedImageData").val();

    const formdata = {
        student_no: student_no,
        firstname: firstname,
        middlename: middlename,
        lastname: lastname,
        birthdate: birthdate,
        gender: gender,
        email: email,
        photo: photo,
    };

    console.log(formdata);

    // Uncomment the following line to reset the form after submission
    // $("#formADD_student")[0].reset();
};

// Function to handle hover effect on icons
$(document).on("mouseenter", ".table-icon", function () {
    $(this).addClass("green-icon");
});

$(document).on("mouseleave", ".table-icon", function () {
    $(this).removeClass("green-icon");
});
