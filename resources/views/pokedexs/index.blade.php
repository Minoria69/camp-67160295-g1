@extends('layouts.app') @section('content')
<div class="container" style="padding: 2rem;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>My Pokedex</h2>
        <a href="{{ route('pokedex.create') }}" class="btn-add" style="background: #2ecc71; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
            + Add New Pokemon
        </a>
    </div>

    <div style="overflow-x: auto; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <table style="width: 100%; border-collapse: collapse; min-width: 800px;">
            <thead>
                <tr style="background: #f8f9fa; border-bottom: 2px solid #dee2e6; text-align: left;">
                    <th style="padding: 12px;">Image</th>
                    <th style="padding: 12px;">Name</th>
                    <th style="padding: 12px;">Type</th>
                    <th style="padding: 12px;">Species</th>
                    <th style="padding: 12px;">Stats (HP/ATK/DEF)</th>
                    <th style="padding: 12px;">H/W</th>
                    <th style="padding: 12px; text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pokedaxs as $pokemon)
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 12px;">
                        @if($pokemon->image_url)
                            <img src="{{ $pokemon->image_url }}" alt="{{ $pokemon->name }}" style="width: 50px; height: 50px; object-fit: contain;">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>
                    <td style="padding: 12px; font-weight: bold;">{{ $pokemon->name }}</td>
                    <td style="padding: 12px;"><span style="background: #eee; padding: 4px 8px; border-radius: 4px;">{{ $pokemon->type }}</span></td>
                    <td style="padding: 12px;">{{ $pokemon->species }}</td>
                    <td style="padding: 12px;">
                        {{ $pokemon->hp }} / {{ $pokemon->attack }} / {{ $pokemon->defense }}
                    </td>
                    <td style="padding: 12px;">{{ $pokemon->height }}m / {{ $pokemon->weight }}kg</td>
                    <td style="padding: 12px; text-align: center;">
                        <a href="{{ route('pokedex.edit', $pokemon->id) }}" style="color: #3498db; margin-right: 10px; text-decoration: none;">Edit</a>

                        <form action="{{ route('pokedex.destroy', $pokemon->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; color: #e74c3c; cursor: pointer;" onclick="return confirm('Delete this Pokemon?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="padding: 20px; text-align: center;">No Pokemon found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
