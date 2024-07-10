@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
      <div class="card-header">
          <span>Articles</span>
          <a href="{{ route('articles.create') }}" class="btn btn-success">Add Article</a>
      </div>
      <div class="card-body">
          <table class="table">
              <thead>
                  <tr>
                      <th>Title</th>
                      <th>Author</th>
                      <th>Date Published</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                          </form>
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>
@endsection