const editorElement = document.querySelector(".editor");

editorElement.addEventListener("click", () => {
    const fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.accept = "image/*";

    fileInput.addEventListener("change", (event) => {
        const file = event.target.files[0];
        if (!file) {
            return; // Handle potential errors or empty selection
        }

        const reader = new FileReader();
        reader.readAsDataURL(file); // Read the file content (optional for preview)

        reader.onloadend = () => {
            // Update the hidden form input with the selected filename
            document.getElementById("profile_picture_input").value = file.name;
            // Submit the form programmatically (triggers server-side upload)
            document.getElementById("profile-picture-form").submit();
        };
    });

    // Simulate click event on the hidden file input (triggers file selection dialog)
    fileInput.click();
});
