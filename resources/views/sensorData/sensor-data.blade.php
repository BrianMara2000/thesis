<x-layout>


    <div class=" container mx-auto flex flex-col justify-center items-center  ">
        <h1>Sensor Data</h1>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Sensor</td>
                <td>Data</td>
                <td>Data & Time</td>
            </tr>
            @foreach ($sensors as $sensor )
            <tr>
                <td>{{ $sensor['id'] }}</td>
                <td>{{ $sensor['sensor'] }}</td>
                <td>{{ $sensor['data'] }}</td>
                <td>{{ $sensor['updated_at'] }}</td>
            </tr>
            @endforeach
        </table>

        <div>
            <button>
                Send
            </button>
        </div>
    </div>
</x-layout>