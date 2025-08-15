<x-layout>
        <div class="text-center p-6 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-t-lg">
        <h1 class="text-3xl font-bold">
            Histórico de encomendas
        </h1>
        <p class="mt-4 text-lg">
            Cliente: {{ $search->nome ?? 'Desconhecido' }} - Telefone: {{ $search->telefone ?? 'Desconhecido' }}
        </p>
    </div>

    <div class="max-w-full mt-8 mx-auto bg-white rounded-lg shadow-sm">
        <div class="text-center p-6">
            <h1 class="text-2xl font-semibold text-gray-800">
                Itens enviados
            </h1>
        </div>
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Código de rastreamento
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Origem
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Destino
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($search->enviados as $enviado)
                <tr class="hover:bg-gray-50 transition-colors border-b">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('frete.rastreamento', [ 'codigo_rastreamento' => $enviado->codigo_rastreamento]) }}" class="underline">
                            {{ $enviado->codigo_rastreamento }}
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        {{ $enviado->origem }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $enviado->destino }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 rounded-full {{ $enviado->status->getTagColor() }}">
                            {{ $enviado->status->value }}
                        </span>
                    </td>
                </tr>
                @endforeach
                @if($search->enviados->isEmpty())
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            Nenhum item enviado encontrado.
                        </td>
                    </tr>
                @endif  
            </tbody>
        </table>
    </div>

    <div class="max-w-full mt-8 mx-auto bg-white rounded-lg shadow-sm">
        <div class="text-center p-6">
            <h1 class="text-2xl font-semibold text-gray-800">
                Itens Recebidos
            </h1>
        </div>
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Código de rastreamento
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Origem
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Destino
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($search->recebidos as $recebido)
                <tr class="hover:bg-gray-50 transition-colors border-b">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('frete.rastreamento', [ 'codigo_rastreamento' => $recebido->codigo_rastreamento]) }}" class="underline">
                            {{ $recebido->codigo_rastreamento }}
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        {{ $recebido->origem }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $recebido->destino }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 rounded-full {{ $recebido->status->getTagColor() }}">
                            {{ $recebido->status->value }}
                        </span>
                    </td>
                </tr>
                @endforeach
                @if($search->recebidos->isEmpty())
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            Nenhum item recebido encontrado.
                        </td>
                    </tr>
                @endif  
            </tbody>
        </table>
    </div>
</x-layout>