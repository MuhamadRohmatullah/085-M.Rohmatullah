<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
                <form action="{{ route('mypostupdate', ['id'=>$match['user_id']]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="modal-header justify-content-center">
                        <img class="iconheight m-3" src="{{asset('assets/images/post.png')}}" alt="gift">
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-4 padding-0">
                                    <label for="" class="form-label">Gambar postingan</label>
                                    <input class="form-control" type="file" name="gambar" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Input Your name" value="{{ $match["watch_name"] }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Competition</label>
                            <input type="text" name="competition" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" value="{{ $match["competition"] }}">
                        </div>
                        <div class="mb-3">
                            <label for="inputDate" class="form-label">Date of Watch</label>
                            <input type="date" name="date" id="inputDate" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $match["date"] }}">
                        </div>
                        <div class="mb-3">
                            <label for="inputDate" class="form-label">Date of Match</label>
                            <input type="datetime-local" name="match_date" id="inputDate" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $match["kickoff"] }}">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="free_paid" id="flexRadioDefault1" value="free" value="{{ $match["free_paid"] }}">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                        Free
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="free_paid" id="flexRadioDefault2" value="pay">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Pay
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{ $match["price"] }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Person</label>
                            <input type="text" name="person" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{ $match["person"] }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Seat</label>
                            <input type="text" name="seat" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{ $match["seat"] }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Home team</label>
                            <input type="text" name="home" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{ $match["home_team"] }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Away team</label>
                            <input type="text" name="away" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{ $match["away_team"] }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Location</label>
                            <textarea class="form-control" name="location_name" id="exampleFormControlTextarea1" rows="3">"{{ $match["name"] }}"</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Alamat</label>
                            <input type="text" name="addres" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{ $match["addres"] }}">
                        </div>
                        <div class="col-4 padding-0">
                            <label for="" class="form-label">Foto Lokasi</label>
                            <input class="form-control" type="file" name="gambarLok" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Link in maps</label>
                            <input type="text" name="location_link" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{ $match["location_link"] }}">
                        </div>
                    </div>
                    <div class="modal-footer border-0 justify-content-center">
                        <button type="submit" class="btn btn-danger getbtn text-uppercase text-white px-5 rounded-5">Get
                            now</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
<!-- bootstrap link -->