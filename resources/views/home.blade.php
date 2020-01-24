@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <div class="links">
                    <table>
                            <tr>
                                <td width="48%"><form action="/weather/weather" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="title">Search Weather by City <small>eg: London</small></label>
                                            <input type="text" class="form-control" style="width:100%;float:left;" id="city"  name="city">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
