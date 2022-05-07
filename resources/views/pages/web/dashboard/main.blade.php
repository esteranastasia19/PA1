<x-web-layout title="dashboard">
    <div class="container">
        <div class="p-5 mb-4 bg-light" style='background-image: url("{{ URL::asset('img/1.jpg') }}"); background-size: cover;'>
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Custom jumbotron</h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
          </div>
        </div>
    
        <div class="row align-items-md-stretch m-1">
          <div class="col-md-6" style='background-image: url("{{ URL::asset('img/1.jpg') }}"); background-size: cover;'>
            <div class="h-100 p-5 text-white ">
              <h2>Change the background</h2>
              <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
            </div>
          </div>
          
          <div class="col-md-6" style='background-image: url("{{ URL::asset('img/1.jpg') }}"); background-size: cover;'>
            <div class="h-100 p-5 ">
              <h2>Add borders</h2>
              <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
            </div>
          </div>
        </div>
    </div>
</x-web-layout>