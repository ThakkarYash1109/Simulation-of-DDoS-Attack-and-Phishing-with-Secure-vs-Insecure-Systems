<h2>Insecure Login</h2>

<script>
setInterval(() => {
    fetch("check.php")
    .then(res => res.json())
    .then(data => {
        if (data.status === "overloaded") {
            document.body.innerHTML = "⚠️ Server Overloaded!";
        }
    });
}, 1000);
</script>