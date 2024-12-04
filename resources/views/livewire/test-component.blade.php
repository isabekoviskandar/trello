<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">tr</th>
                      </tr>
                    </thead>
                    <tbody wire:sortable="testUpdate">
                        @foreach ($tests as $test)
                            <tr draggable="true" wire:sortable.item="{{ $test->id }}" wire:sortable.handle>
                                <td>{{ $test->id }}</td>
                                <td>{{ $test->name }}</td>
                                <td>{{ $test->tr }}</td>
                            </tr>
                        @endforeach
                    </tbody>                    
                </table>
            </div>
        </div>
    </div>
</div>
