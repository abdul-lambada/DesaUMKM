<x-guest-layout>
    <div class="text-center mb-8">
        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-user-plus text-white text-2xl"></i>
        </div>
        <h2 class="text-2xl font-bold text-gray-800">Daftar Akun Baru</h2>
        <p class="text-gray-600 mt-2">Buat akun untuk mengakses layanan Desa UMKM</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" class="text-gray-700 font-semibold" />
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-user text-gray-400"></i>
                </div>
                <x-text-input id="name" class="block mt-1 w-full pl-10" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Masukkan nama lengkap Anda" />
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-semibold" />
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-envelope text-gray-400"></i>
                </div>
                <x-text-input id="email" class="block mt-1 w-full pl-10" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Masukkan email Anda" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Role and Dusun in 2 columns -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Role -->
            <div>
                <x-input-label for="role" :value="__('Jenis Akun')" class="text-gray-700 font-semibold" />
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-users text-gray-400"></i>
                    </div>
                    <select id="role" name="role" class="block mt-1 w-full pl-10 border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" required>
                        <option value="">Pilih jenis akun</option>
                        <option value="warga" {{ old('role') == 'warga' ? 'selected' : '' }}>Warga Desa</option>
                        <option value="pengunjung" {{ old('role') == 'pengunjung' ? 'selected' : '' }}>Pengunjung</option>
                    </select>
                </div>
                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>

            <!-- Dusun -->
            <div>
                <x-input-label for="dusun" :value="__('Dusun')" class="text-gray-700 font-semibold" />
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-map-marker-alt text-gray-400"></i>
                    </div>
                    <x-text-input id="dusun" class="block mt-1 w-full pl-10" type="text" name="dusun" :value="old('dusun')" required placeholder="Masukkan nama dusun" />
                </div>
                <x-input-error :messages="$errors->get('dusun')" class="mt-2" />
            </div>
        </div>

        <!-- NIK and Phone in 2 columns -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- NIK -->
            <div>
                <x-input-label for="nik" :value="__('NIK')" class="text-gray-700 font-semibold" />
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-id-card text-gray-400"></i>
                    </div>
                    <x-text-input id="nik" class="block mt-1 w-full pl-10" type="text" name="nik" :value="old('nik')" required placeholder="Masukkan NIK 16 digit" maxlength="16" oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
                </div>
                <x-input-error :messages="$errors->get('nik')" class="mt-2" />
            </div>

            <!-- Phone -->
            <div>
                <x-input-label for="phone" :value="__('Nomor Telepon')" class="text-gray-700 font-semibold" />
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-phone text-gray-400"></i>
                    </div>
                    <x-text-input id="phone" class="block mt-1 w-full pl-10" type="tel" name="phone" :value="old('phone')" required placeholder="Contoh: 081234567890" oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
                </div>
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-semibold" />
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-lock text-gray-400"></i>
                </div>
                <x-text-input id="password" class="block mt-1 w-full pl-10"
                                type="password"
                                name="password"
                                required autocomplete="new-password" 
                                placeholder="Masukkan password Anda" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" class="text-gray-700 font-semibold" />
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-lock text-gray-400"></i>
                </div>
                <x-text-input id="password_confirmation" class="block mt-1 w-full pl-10"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" 
                                placeholder="Konfirmasi password Anda" />
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="pt-4">
            <x-primary-button class="w-full justify-center bg-gradient-to-r from-green-500 to-blue-600 hover:from-green-600 hover:to-blue-700 py-3 text-lg font-semibold">
                <i class="fas fa-user-plus mr-2"></i>{{ __('Daftar') }}
            </x-primary-button>
        </div>

        <div class="text-center pt-4">
            <p class="text-gray-600">
                Sudah punya akun? 
                <a href="{{ route('login') }}" class="text-green-600 hover:text-green-800 font-semibold transition-colors">
                    Masuk di sini
                </a>
            </p>
        </div>
    </form>

    <script>
        // Validasi NIK
        document.getElementById('nik').addEventListener('input', function(e) {
            let value = e.target.value.replace(/[^0-9]/g, '');
            if (value.length > 16) {
                value = value.substring(0, 16);
            }
            e.target.value = value;
        });

        // Validasi Phone
        document.getElementById('phone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/[^0-9]/g, '');
            if (value.length > 15) {
                value = value.substring(0, 15);
            }
            e.target.value = value;
        });

        // Validasi form sebelum submit
        document.querySelector('form').addEventListener('submit', function(e) {
            const nik = document.getElementById('nik').value;
            const phone = document.getElementById('phone').value;
            const role = document.getElementById('role').value;

            if (nik.length !== 16) {
                e.preventDefault();
                alert('NIK harus 16 digit angka');
                return false;
            }

            if (phone.length < 10) {
                e.preventDefault();
                alert('Nomor telepon minimal 10 digit');
                return false;
            }

            if (!role) {
                e.preventDefault();
                alert('Silakan pilih jenis akun');
                return false;
            }
        });
    </script>
</x-guest-layout>

