<x-template-auth>
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <x-alert/>

                    <form class="flex flex-col" method="POST" action="{{ '/2fa/' . $id }}">
                        <input type="hidden" name="id" value="{{ $id }}">
                        <input type="hidden" name="redirect" value="{{ get('redirect') }}">

                        <p>Confirme el acceso a su cuenta ingresando el código de autenticación proporcionado por su aplicación de autenticación.</p>

                        <div class="mt-3 mb-3">
                            <x-label for="code" text="{{ lang('auth.code') }}"/>
                            <x-input name="code" required/>
                        </div>

                        <x-button color="dark" border="dark">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            {{ lang('auth.verify') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-template-auth>
