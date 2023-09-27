//for sticky nav bar

document.addEventListener("scroll", () => {
  const header = document.querySelector("header");

  if (window.scrollY > 0) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

//for scroll to the top function

const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
});

// For Filtering the Bank table

document.addEventListener("DOMContentLoaded", function () {
  const filterTable = document.getElementById("location");
  const filterBtn = document.getElementById("filterBtn");
  const table = document.getElementById("bankList");
  const errMsg = document.getElementById("errMsg");

  if (filterBtn) {
    filterBtn.addEventListener("click", function () {
      const selectedValue = filterTable.value;

      const rows = table.getElementsByTagName("tr");
      let found = false;
      for (let i = 1; i < rows.length; i++) {
        const row = rows[i];
        const cell = row.getElementsByTagName("td")[2];

        if (selectedValue === "all" || cell.textContent === selectedValue) {
          row.style.display = "";
          found = true;
        } else {
          row.style.display = "none";
        }
      }

      if (found) {
        errMsg.style.display = "none";
      } else {
        errMsg.style.display = "block";
      }
    });
  }
});
