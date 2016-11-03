// Test File "admin-dashboard.spec.js"

import AdminDashboard from '../../components/admin-dashboard.vue';

describe('AdminDashboard', () => {
    it('should exist', function () {
        expect(typeof AdminDashboard.mounted).toBe('function');
        var defaultData = AdminDashboard.data();
        expect(defaultData.test).toBe('# Hello!');
    });
});