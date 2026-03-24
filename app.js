function login() {
  const email = document.getElementById("email").value;
  const pass = document.getElementById("password").value;
  const error = document.getElementById("error");

  if (!email || !pass) {
    error.style.display = "block";
    error.innerText = "Completa todos los campos";
    return;
  }

  if (email === "admin@ccp.com" && pass === "123456") {
    localStorage.setItem("user", JSON.stringify({ email }));
    window.location.href = "/dashboard.html";
  } else {
    error.style.display = "block";
    error.innerText = "Credenciales incorrectas";
  }
}

// Protección básica
function checkAuth() {
  const user = localStorage.getItem("user");
  if (!user) {
    window.location.href = "/";
  }
}

// Logout
function logout() {
  localStorage.removeItem("user");
  window.location.href = "/";
}
