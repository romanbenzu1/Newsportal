<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Edit Advertise</h4>
            <a href="{{ route('admin.advertise.index') }}" class="btn btn-primary">
                go back
            </a>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.advertise.update', $advertise->id) }}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="my-3 col-6">
                        <label>Company Name<span class="text-danger">*</span></label>
                        <input type="text"
                               name="company_name"
                               class="form-control"
                               value="{{ old('company_name', $advertise->company_name) }}">
                        @error('company_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-3 col-6">
                        <label>Contact<span class="text-danger">*</span></label>
                        <input type="text"
                               name="contact"
                               class="form-control"
                               value="{{ old('contact', $advertise->contact) }}">
                        @error('contact')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-3 col-6">
                        <label>Ad Position<span class="text-danger">*</span></label>
                        <select name="ad_position" class="form-control">
                            <option value="header"
                                {{ old('ad_position', $advertise->ad_position) == 'header' ? 'selected' : '' }}>
                                Header (1000w x 100h)
                            </option>
                            <option value="home_page"
                                {{ old('ad_position', $advertise->ad_position) == 'home_page' ? 'selected' : '' }}>
                                Home Page (1000w x 100h)
                            </option>
                            <option value="other_page"
                                {{ old('ad_position', $advertise->ad_position) == 'other_page' ? 'selected' : '' }}>
                                Other Page (400w x 400h)
                            </option>
                        </select>
                        @error('ad_position')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-3 col-6">
                        <label>Redirect Link<span class="text-danger">*</span></label>
                        <input type="text"
                               name="redirect_url"
                               class="form-control"
                               value="{{ old('redirect_url', $advertise->redirect_url) }}">
                        @error('redirect_url')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-3 col-6">
                        <label>Expire Date<span class="text-danger">*</span></label>
                        <input type="date"
                               name="expire_date"
                               class="form-control"
                               value="{{ old('expire_date', $advertise->expire_date) }}">
                        @error('expire_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="my-3">
                    <label>Upload Image</label>
                    <input type="file" name="image" class="form-control">

                    @if($advertise->image)
                        <div class="mt-2">
                            <img src="{{ asset($advertise->image) }}" height="80">
                        </div>
                    @endif

                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">
                    Update Record
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
