<div class="searchwrap">
  <div class="container">
    <h3>Welcome to  {{ config('app.name', 'Laravel') }}. <span>The Medical Employment People.</span></h3>
    <div class="searchbar row">
      <form action="{{ url('search') }}" method="get">
      <div class="col-md-3 ">
        <select name="category" class="form-control">
          <option value="0">Select Speciality</option>
          @foreach(\App\Category::all() as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-6">
        <input type="text" name="q" class="form-control" placeholder="Enter City, State or Zip code" />
      </div>
      <div class="col-md-3">
        <input type="submit" class="btn btn-block" value="Search Job">
      </div>
      </form>
    </div>
    <!-- button start -->
    <div class="getstarted">
      {{-- <p>
        <input type="text" name="zip" class="form-control zipcode"/>Find Job By Zip Code
      </p> --}}      
    </div>
    <!-- button end --> 

  </div>
</div>