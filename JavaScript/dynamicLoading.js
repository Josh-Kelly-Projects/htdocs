document.getElementById("load-content-btn").addEventListener("click", function() {
    // Fetch data from the JSON file
    fetch("data.json")
        .then(response => response.json())
        .then(data => {
            // Process the fetched data and update the HTML content
            let dynamicContent = document.getElementById("dynamic-content");
            dynamicContent.innerHTML = ""; // Clear existing content
            data.forEach(item => {
                let element = document.createElement("p");
                element.textContent = item.title;
                element.classList.add("content-item"); // Add a CSS class
                dynamicContent.appendChild(element);
            });
        })
        .catch(error => {
            console.error("Error fetching data:", error);
        });
});