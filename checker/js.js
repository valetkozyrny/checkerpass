let input = document.getElementById('pass')

input.addEventListener('input', function () {

    let password = this.value;

    fetch('checkerhtml.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'password=' + encodeURIComponent(password)
    })
        .then(response => response.text())
        .then(data => {
            result.innerHTML = data;
        });

});

