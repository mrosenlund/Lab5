<div class="alert alert-danger">{remaining_tasks} tasks are left to do!</div>

<table class="table table-responsive">
    <tr>
        <th>Id</th>
        <th>Task</th>
        <th>Priority</th>
    </tr>
    {display_tasks}
    <tr>
        <td>{id}</td>
        <td>{task}</td>
        <td>{priority}</td>
    </tr>
    {/display_tasks}
</table>