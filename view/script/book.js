const book = document.getElementById('label');

book.addEventListener('submit', async function(event) {
    event.preventDefault();

    const selectedle = document.getElementById('username').value;
    let teksRespon = "";

    try {
        const response = await fetch('../../controller/process.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
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
                window.location.href = '../user/home.php';
            }
        } else {
            alert('Login gagal: ' + hasil.pesan);
        }
    } catch (error) {
        // Menampilkan pesan error PHP apa adanya ke layar
        alert('Error dari PHP:\n\n' + teksRespon.replace(/<[^>]*>?/gm, ''));
    }
});