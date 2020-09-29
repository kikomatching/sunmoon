<tr v-for="log in logs">
    <td>@{{ log.timestamp }}</td>
    <td>@{{ log.log_type }}</td>
    <td>
        <button v-on:click="destroy(log.log_id)" class="btn btn-sm btn-danger">Delete</button>
    </td>
</tr>