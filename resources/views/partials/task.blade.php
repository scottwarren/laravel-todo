@if (is_null($task))
  No task found for ID '{{ $id }}'
@else
  <div class="task">
    <label>
        <input type="checkbox">
        {{-- If we don't have an ID we are showing all of the tasks --}}
        @if (!isset($id))
          <a href="/{{ isset($task) ? $task->getId() : '' }}">
        @endif
        {{ $task->getName() }}
        @if (!isset($id))
          </a>
        @endif
    </label>
  </div>
@endif
