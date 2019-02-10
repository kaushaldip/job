@foreach(\App\State::all() as $state)
<option @if( $job && $job->state_id == $state->id) selected="selected" @endif value="{{ $state->id }}">{{ $state->name }}</option>
@endforeach