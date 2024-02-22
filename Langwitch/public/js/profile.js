const changeProfile = document.querySelector(".editor");

changeProfile.addEventListener("click", () => {
    const fileInput = document.createElement("INPUT");
    fileInput.type = "file";
    fileInput.accept = "image/*";
    function handleFileSelect() {
        console.log(fileInput.files[0].name);
        // TODO: Upload the file to the server
    }
    fileInput.addEventListener("change", handleFileSelect);
    function openFileSelectionDialog() {
        fileInput.click();
    }
    openFileSelectionDialog();
});
