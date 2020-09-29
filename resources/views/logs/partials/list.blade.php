<table v-if="logs.length" class="table">
    <thead>
        <tr>
            <th scope="col">Timestamp</th>
            <th scope="col">Log Type</th>
        </tr>
    </thead>
    <tbody>
        @include('logs.partials.list-row')
    </tbody>
  </table>