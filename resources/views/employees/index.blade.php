

<div style="font-family: Arial, sans-serif; margin: 20px;">
    <a href="{{ route('employees.create') }}" style="display: inline-block; background-color: #28a745; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; margin-bottom: 20px; font-size: 16px;">Add New Employee</a>

    <table style="width: 100%; border-collapse: collapse; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <thead style="background-color: #f2f2f2;">
            <tr>
                <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; color: #333;">Name</th>
                <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; color: #333;">Email</th>
                <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; color: #333;">Position</th>
                <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; color: #333;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $emp)
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 10px 15px;">{{ $emp->name }}</td>
                    <td style="padding: 10px 15px;">{{ $emp->email }}</td>
                    <td style="padding: 10px 15px;">{{ $emp->position }}</td>
                    <td style="padding: 10px 15px;">
                        <a href="{{ route('employees.edit', $emp->id) }}" style="background-color: #007bff; color: white; padding: 6px 10px; text-decoration: none; border-radius: 4px; margin-right: 5px; font-size: 14px;">Edit</a>
                        <form method="POST" action="{{ route('employees.destroy', $emp->id) }}" style="display: inline-block;">
                            @csrf @method('DELETE')
                            <button type="submit" style="background-color: #dc3545; color: white; padding: 6px 10px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px;" onclick="return confirm('Are you sure you want to delete this employee?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>