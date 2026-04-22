<h2>Secure Login</h2>

<script>
let attempts = 0;

function login() {
    attempts++;

    if (attempts >= 3) {
        document.body.innerHTML =
        "🚫 Blocked for 24 hours (Too many attempts)";
        return;
    }
}

setInterval(() => {
    fetch("check.php")
    .then(res => res.json())
    .then(data => {
        if (data.status === "overloaded") {
            console.log("Protected: Ignoring overload");
        }
    });
}, 1000);
</script>