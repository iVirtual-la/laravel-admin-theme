<div class="table-responsive">

    <table class="table table-mc-red pmd-table">

        <thead>

            <tr>

                {{ $head or '' }}

                @if(isset($actions))

                    <th class="text-center" style="width: {{ $actions }}%">{{ __('admin-theme::general.actions') }}</th>

                @endif

            </tr>

        </thead>

        <tbody>

            {{ $slot }}

        </tbody>

    </table>

</div>