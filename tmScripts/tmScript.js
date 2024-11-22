document.addEventListener('DOMContentLoaded', () => {
    const deleteLinks = document.querySelectorAll('.delete-link');
    const deleteTaskDialog = document.getElementById('deleteDialog');
    const cancelDeleteTaskBtn = document.getElementById('cancelDeleteTask');
    const deleteTaskIdInput = document.getElementById('deleteTaskId');
    const taskTitle = document.getElementById('taskTitle');

    deleteLinks.forEach(link => link.addEventListener('click', (e) => {
        e.preventDefault();
        deleteTaskIdInput.value = link.getAttribute('data-task-id');
        taskTitle.textContent = link.getAttribute('data-task-title');
        deleteTaskDialog.showModal();
    }));

    cancelDeleteTaskBtn.addEventListener('click', () => deleteTaskDialog.close());
})