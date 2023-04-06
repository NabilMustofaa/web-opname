console.log("login.js");

let operator = $("#Operator");
let submit = $("#submit-keyword");
let detail = $("#card-detail");

submit.on("click", function () {
    let keyword = $("#Keyword");
    let value = keyword.val();
    $.ajax({
        url: `/api/opname/${value}/users`,
        type: "GET",
    })
        .done(function (response) {
            data = response.data;
            $("#Description").text(data[0].Description);
            $("#Location").text(data[0].Location);
            $("#Date").text(
                `${new Date(data[0].StartDate).toLocaleDateString("en-GB", {
                    day: "numeric",
                    month: "long",
                    year: "numeric",
                })} - ${new Date(data[0].EndDate).toLocaleDateString("en-GB", {
                    day: "numeric",
                    month: "long",
                    year: "numeric",
                })}`
            );
            operator.empty();
            data.forEach(function (user) {
                operator.append(
                    `<option value="${user.Operator}">${user.Operator}</option>`
                );
            });
        })
        .fail(function (err) {
            console.log(err);
        });
    detail.removeClass("d-none");
    
});

operator.on("change", function () {
    let selected = $(this).val();
    let keyword = $("#keyword").val();
    console.log($("#login"));
    $("#login").on("click", function () {
        window.location.href = `${keyword}/${selected}`;
    });
});
