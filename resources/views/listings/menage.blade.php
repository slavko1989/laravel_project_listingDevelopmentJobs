@include('bootstrap_section._head')
<table class="table table-striped">
  <thead>
    @unless($listings->isEmpty())
    @foreach($listings as $list)
    <tr>
      <th>Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $list->title }}</td>
      <td>
        <form method="POST" action="/listings/{{ $list->id }}">
          @csrf
          @method('DELETE')
          <button style="font-family: !important;font-weight: bolder;letter-spacing: 3px;font-size: 18px;"><span class="glyphicon glyphicon-trash"></span>DELETE</button>
          </form> | <a href="/listings/{{ $list->id }}/edit" style="font-family: !important;font-weight: bolder;letter-spacing: 3px;font-size: 18px;"><span class="glyphicon glyphicon-pencil"></span>EDIT</a></td>
        </tr>
        @endforeach
        @else
        <p>NOTHING TO SHOW</p>
        @endunless
      </tbody>
    </table>
  </div>