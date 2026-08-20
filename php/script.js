$(document).ready(() => {

    const table = $('#productList').DataTable({
        columns: [
            { data: 'student_id' },
            { data: 'name' },
            { data: 'gender' },
            { data: 'age' },
            { data: 'address' },
            { data: 'course' },
            { data: 'marks' }
        ]
    });

    function loadData() {

        $.ajax({
            url: "get_data_ajax.php",
            type: "GET",
            dataType: "json",

            success: (data) => {

                table.clear();
                table.rows.add(data);
                table.draw();

            },

            error: (error) => {
                console.log("Error:", error);
            }
        });
    }

    loadData();
    setInterval(loadData, 5000);

});