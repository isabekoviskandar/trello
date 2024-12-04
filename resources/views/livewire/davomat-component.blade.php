<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Davomat</h1>
                <input type="date" class="form-control" wire:change="changeDate($event.target.value)">
                <h4 class="text-primary m-2">{{$date->format('F Y')}}</h4>
                <table class="table table-bordered table-striped table-dark mt-2">
                    <tr>
                        <th>#</th>
                        <th class="w-50">Name</th>
                        @foreach ($days as $day)
                            <th>{{$day->format('d')}}</th>
                        @endforeach
                    </tr>
                    @foreach ($students as $student)
                        <tr>
                            <th class="w-50" style="width: 500px; !important">{{$student->id}}</th>
                            <td>{{$student->name}}</td>
                            @foreach ($days as $day)
                            @php
                                $userDavomat = $student->checks($day->format('Y-m-d'));
                            @endphp
                                <td wire:click="inputView('{{$student->id}}' , '{{$day->format('Y-m-d')}}')">
                                    @if ($studentId == $student->id && $davomatDate == $day->format('Y-m-d'))
                                        <input type="text" style="width: 30px;" autofocus value="{{$studentDavomat->status ?? ''}}"
                                        wire:keydown.enter="createDavomat('{{$student->id}}', '{{$day->format('Y-m-d')}}', $event.target.value)">
                                
                                    @else
                                        @if ($userDavomat)
                                            <span class="text--{{$userDavomat->status == '+' ? 'primary' : 'danger'}}">
                                                {{$userDavomat->status}}
                                            </span>
                                        @endif
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>