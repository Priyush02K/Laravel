<form method="POST" action="{{ route('employees.store') }}" style="font-family: Arial, sans-serif; max-width: 400px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
  @csrf
  <div style="margin-bottom: 15px;">
    <input name="name" placeholder="Name" style="width: calc(100% - 22px); padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
  </div>
  <div style="margin-bottom: 15px;">
    <input name="email" placeholder="Email" type="email" style="width: calc(100% - 22px); padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
  </div>
  <div style="margin-bottom: 15px;">
    <input name="position" placeholder="Position" style="width: calc(100% - 22px); padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
  </div>
  <button type="submit" style="background-color: #4CAF50; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; width: 100%;">Save</button>
</form>