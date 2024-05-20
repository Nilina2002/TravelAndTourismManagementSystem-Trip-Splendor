function confirmDelete(noticeId) {
    if (confirm("Are you sure you want to delete this notice?")) {
        
        window.location.href = "delete_notice.php?notice_id=" + noticeId;
    }
}


function confirmSubmit() {
    return confirm("Submit Form?");
}

function confirmUpdate() {
    return confirm("Are you sure you want to update?");
}