let input = document.getElementById('pass')

input.addEventListener('input', function () {

    let password = this.value;

    fetch('checkerlogika.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'pass=' + encodeURIComponent(password)
    })
        .then(response => response.text())
        .then(data => {


            let credits = Number(data);
            let p = document.getElementById('paragraph');
            let fillbar = document.getElementById('strength-fill');
            if (credits > 0 && credits < 10) {
                p.textContent = "Your password is very weak";
                fillbar.style.width = "25%";
                fillbar.style.backgroundColor = "red";
            } else if (credits >= 10 && credits < 20) {
                p.textContent = "Your password is medium";
                fillbar.style.width = "60%";
                fillbar.style.backgroundColor = "orange";
            } else if (credits >= 20) {
                p.textContent = "Your password is very strong!";
                fillbar.style.width = "100%";
                fillbar.style.backgroundColor = "green";
            } else {
                p.textContent = "";
                fillbar.style.width = "0%";
            }



        })
        .catch(error => {
            let p = document.getElementById('paragraph');
            p.textContent = 'error';
            console.log(error);
        });


});

