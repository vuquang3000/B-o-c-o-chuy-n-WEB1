@extends('layouts.app')

@section('content')
  <main>
    <div class="container">
      <section>

        <h3>Flight Booking</h3>
        <div class="panel panel-default">
          <div class="panel-body">
            <form role="form" action="{{ route('search')}}" method="GET">
              <div class="row">
                <div class="col-sm-4">
                  <h4 class="form-heading">1. Flight Destination</h4>
                  <div class="form-group">
                    <label class="control-label">From: </label>
                    <select class="form-control" name="from" id="from">
                      @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->city_name }} ({{ $city->city_code }})</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">To: </label>
                    <select class="form-control" name="to" id="to">
                      @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->city_name }} ({{ $city->city_code }})</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <h4 class="form-heading">2. Date of Flight</h4>
                  <div class="form-group">
                    <label class="control-label">Departure: </label>
                    <input type="date" name="departure-date" class="form-control" value="{{ date("Y-m-d") }}" placeholder="Choose Departure Date">
                  </div>
                  <div class="form-group">
                    <div class="radio">
                      <label><input type="radio" name="flight_type" checked value="1">One Way</label>
                      <label><input type="radio" name="flight_type" value="2">Return</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Return: </label>
                    <input type="date" name="return-date" class="form-control" value="" placeholder="Choose Return Date">
                  </div>
                </div>
                <div class="col-sm-4">
                  <h4 class="form-heading">3. Search Flights</h4>
                  <div class="form-group">
                    <label class="control-label">Total Person: </label>
                    <select class="form-control" name="total-passenger">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Flight Class: </label>
                    <select class="form-control" name="flight-class">
                      @foreach ($flightClasses as $flightClass)
                        <option value="{{ $flightClass->id }}">{{ $flightClass->flight_classes_name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Search Flights</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </main>
@endsection
