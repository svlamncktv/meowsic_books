const loginForm = document.getElementById('Form');

loginForm.addEventListener('submit', async function(event) {
    event.preventDefault();

    const usernameInput = document.getElementById('username').value;
    const passwordInput = document.getElementById('password').value;
    // Perbaikan: ganti "Title" menjadi "role"
    const selectedRole = document.querySelector('input[name="role"]:checked').value;

    let teksRespon = "";

    try {
        const response = await fetch('../../controller/process.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                username: usernameInput,
                password: passwordInput,
                role: selectedRole
            })
        });

        teksRespon = await response.text();
        const hasil = JSON.parse(teksRespon);

        if (hasil.status === 'sukses') {
            if (selectedRole === '3') {
                window.location.href = '../auth/author.php';
            } else {
                window.location.href = '../../controller/bookcontroller.php';
            }
        } else {
            alert('Login gagal: ' + hasil.pesan);
        }
    } catch (error) {
        alert('Error:\n\n' + (teksRespon ? teksRespon.replace(/<[^>]*>?/gm, '') : error.message));
    }
});
