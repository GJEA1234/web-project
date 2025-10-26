function login() {
  const username = document.getElementById("username").value.trim();
  const password = document.getElementById("password").value.trim();
  const errorMsg = document.getElementById("error-msg");

  // Dummy user data (in real apps, validate with server/database)
  const studentAccounts = {
    "student01": "pass123",
    "student02": "abc456",
    "student03": "demo789"
  };

  if (!username || !password) {
    errorMsg.textContent = "Please enter both Student ID and Password.";
    return;
  }

  if (studentAccounts[username] && studentAccounts[username] === password) {
    alert("Login successful! Redirecting...");
    // Redirect or proceed
    window.location.href = "student-dashboard.html"; // or dashboard page
  } else {
    errorMsg.textContent = "Invalid Student ID or Password.";
  }
}
